# Grav Emojione Plugin

`emojione` is a [Grav](http://github.com/getgrav/grav) Plugin that translates a Twig string into the relative [Emojione](https://www.emojione.com/) image.

# Installation

Install through the GPM

# Usage

Example usage:

`{{emojione(':star2:')}}`

This will print the star image. Images are fetched from the Emojione CDN.

Make sure you check the [attribution terms](https://www.emojione.com/developers/free-license#how-to-attribute) for the free license.

## Note for future updates of the dependencies

Remove the fonts folder in the emojione vendor lib as it's 100MB+ big, and it contains unused code.