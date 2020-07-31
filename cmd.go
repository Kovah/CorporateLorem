package main

import (
	"github.com/spf13/cobra"
)

var rootCmd = &cobra.Command{
	Use:   "corporatelorem",
	Short: "CorporateLorem is your Lorem Ipsum generator made from real-world text.",
	Long:  `Show paragraphs of real text ready to copy and paste. No more "Lorem ipsum dolor", get some lines from serious articles.`,
	Run: func(cmd *cobra.Command, args []string) {
		err := cmd.Help()
		Check(err)
	},
}

func CmdExecute() {
	if err := rootCmd.Execute(); err != nil {
		Check(err)
	}
}
