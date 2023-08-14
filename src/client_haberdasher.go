package main

import (
	"context"
	"fmt"
	"net/http"
	"os"

	pbapp "github.com/arctichawks/go-twirp-php-example/codegen/app-php-golang-client-server"
)

func main() {
	client := pbapp.NewHaberdasherProtobufClient("http://localhost:8080", &http.Client{})

	hat, err := client.MakeHat(context.Background(), &pbapp.Size{Inches: 1})
	if err != nil {
		fmt.Printf("oh no: %v", err)
		os.Exit(1)
	}
	fmt.Printf("I have a nice new hat: %+v", hat)
}
