<h1 align="center">CorporateLorem</h1>

<p align="center">Get paragraphs of real text ready to copy and paste. No more "Lorem ipsum dolor", get some lines from serious articles.</p>

<p>&nbsp;</p>

<img src="/preview.png" alt="CorporateLorem Preview">

<p>&nbsp;</p>


## About CorporateLorem

CorporateLorem is a small tool that generates Lorem Ipsum paragraphs from real text about different serious topics.
The tool contains texts from the New York Times, The Guardian and The Verge across 8 different topics, such as 
politics, health and science.  
It can be used as a command line tool, or can be run as a website that offers both a user interface to generate the
paragraphs and an API.


---


## Download CorporateLorem

The latest version of the tool can be found on the [releases page](https://github.com/Kovah/CorporateLorem/releases).
Please download the archive file of the latest release suitable for your operating system. Unpack the zip and make the
binary executable.  
Alternatively, you can use the Docker image. Details about the usage can be found further down.


## The command line tool

The command line tool can be used to quickly generate paragraphs within your terminal or in scripts. It is available
as the `generate` command and has some optional parameters.

```
corporatelorem generate
```

Usage:  
  corporatelorem generate [flags]

Flags:  
  -f, --format string        Format of the returned paragraphs, either json or text (default json)  
  -h, --help                 help for generate  
  -n, --number int           Number of paragraphs returned (default 5)  
  -p, --paragraphs           Show paragraph tags (<p> and </p>) in the generated paragraphs


#### Examples

* `corporatelorem generate` would get you 5 paragraphs in JSON without `<p>` tags
* `corporatelorem generate -n 15 -p` would get you 15 paragraphs in JSON including the `<p>` tags
* `corporatelorem generate -n 30 -p -f text` would get you 30 paragraphs as plain text including the `<p>` tags
* `corporatelorem generate -n 60 -f text` would get you 60 paragraphs as plain text without `<p>` tags


---


## The website (user interface + API)

The CorporateLorem executable ships with a built-in web server including all static assets. You can start the web server by
using the `serve` command. By default, the started web server listens to port 80 on your host.

```
$ corporatelorem serve
Starting HTTP server for CorporateLorem on :80...
```

You can now open CorporateLorem in your browser under `http://localhost`.

If you want to use another port, you can use the optional bind flag. To change the port, specify the port including
preceding colon. In the following example we tell CorporateLorem to use the port 8090:

```
corporatelorem serve -b :8090
```


### Usage of the website API

Once the web server is started, the CorporateLorem API is available too. In the following examples I assume that you have set
up CorporateLorem behind a proxy with the domain `your-domain.com` and HTTPS configured.

Required URL structure:
`https://your-domain.com/api/[int]`

* The results will be returns as Json by default.
* The maximum allowed amount of paragraphs is `99`.
* Append `paragraphs=true` as a query parameter to show paragraph tags in the output.
* Append `format=text` as a query parameter to get plain text output.


#### Examples

* `https://your-domain.com/api/5` would get you 5 paragraphs in JSON without `<p>` tags
* `https://your-domain.com/api/15?paragraphs=true` would get you 15 paragraphs in JSON including the `<p>` tags
* `https://your-domain.com/api/30?paragraphs=true&format=text` would get you 30 paragraphs as plain text including the `<p>` tags
* `https://your-domain.com/api/60?format=text` would get you 60 paragraphs as plain text without `<p>` tags


---


## The CorporateLorem Docker image

CorporateLorem is also available as a [Docker image](https://hub.docker.com/r/kovah/corporatelorem). It is built using Alpine
Linux and is less than 10 MB large.

To use the command line tool, run the Docker image with the `generate` command. More details about the tool can be
found in the command line documentation above.

```
docker run --rm kovah/corporatelorem generate
```

To use the website, you have to additionally forward a port. Please notice that CorporateLorem does not support HTTPS
connections, so you probably need a proxy in front of it.  
You can start the web server by using the `serve` command. More details about the command can be found in the website 
documentation above.

```
docker run --rm -p 80:80 kovah/corporatelorem serve
```


---


## Contribution

Want to contribute more source texts? Please create a pull request for the new file that should follow the exact same 
styling like the ones that are already available:

* Filename must contain the name (lowercase, spaces replaced with dashes).
* The JSON strcuture must match the existing files.
* Do not use any <p> tags in the paragraphs.
* Use texts from the already used sources only, or explain why a new source is needed.


---


## Development and Compilation

### Development

You need the following packages on your machine to be able to work on CorporateLorem and compile the binary:

* github.com/spf13/cobra
* github.com/gorilla/mux
* github.com/GeertJohan/go.rice
* github.com/GeertJohan/go.rice/rice

This can be done by running `go mod download` in the current project directory.

To test the package, compile it and then run the resulting executable. I recommend using Goland
for local development. 


### Compilation

To compile the binary and run it locally in the same folder, run the following command:

```
npm run build-prod
go build
```

To generate a single binary without any dependencies, you have to generate the needed content file for that:
```
rice embed-go
# then run the build command
go build
```

To test the current source code, run the following command:
```
go test -run ''
```


---


CorporateLorem is a project by [Kovah](https://kovah.de) | [Contributors](https://github.com/Kovah/CorporateLorem/graphs/contributors)
