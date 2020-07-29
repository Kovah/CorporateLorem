package main

import (
	"encoding/json"
	rice "github.com/GeertJohan/go.rice"
	"math/rand"
	"time"
)

type Source struct {
	Source     string   `json:"source"`
	Paragraphs []string `json:"paragraphs"`
}

func GetSources() []string {
	arr := make([]string, 1)

	arr[0] = "test.json"

	return arr
}

func GetSourceContent(sourceFile string) (Source, error) {
	sourceBox := rice.MustFindBox("lorem")

	content, err := sourceBox.Bytes(sourceFile)
	Check(err)

	var source Source
	err = json.Unmarshal(content, &source)

	return source, err
}

func GetRandomContent(addParagraphs bool) Source {
	sources := GetSources()
	sourceFile := sources[rand.Intn(len(sources))]

	source, err := GetSourceContent(sourceFile)
	Check(err)

	if addParagraphs {
		for i, paragraph := range source.Paragraphs {
			source.Paragraphs[i] = "<p>" + paragraph + "</p>"
		}
	}

	rand.Seed(time.Now().UnixNano())
	rand.Shuffle(len(source.Paragraphs), func(i, j int) {
		source.Paragraphs[i], source.Paragraphs[j] = source.Paragraphs[j], source.Paragraphs[i]
	})

	return source
}

func GetNumLines(amount int, addParagraphs bool) Source {
	source := GetRandomContent(addParagraphs)

	// Fill results with random lines from the results by appending random lines
	for len(source.Paragraphs) < amount {
		rand.Seed(time.Now().UnixNano())
		source.Paragraphs = append(source.Paragraphs, source.Paragraphs[rand.Intn(len(source.Paragraphs))])
	}

	// Limit number of returned lines to the given amount
	source.Paragraphs = source.Paragraphs[0:amount]

	return source
}
