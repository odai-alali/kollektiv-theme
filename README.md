# Kollektive

A privacy oriented wordpress theme based on [_s](https://underscores.me)

## Motivation
Privacy browsers usually disables JS. Therfore, This theme is developed to work without js.
- The multilevel menu is implemented with pure CSS to work even when JS is disabled.
- No Trackers where added to this theme.
- Fonts are installed locally rather using Google Fonts for example

## Installation
You can install this theme by downloading the repo as a zip and extract in the `wp-content/themes` folder but it's highly recommended to use https://github.com/afragen/github-updater to keep your theme easily up to date.

## Development
Docker setup where provided for the ease of testing and developing of the theme. To run a wordpress instance:

```bash
docker-compose up -d
``` 

### Available Scripts

```bash
npm run watch # compile and watch scss
npm run build # compiles scss into style.css
npm run pot # extract messages to translate to languages/kollektive.pot
```

## Translations
Use [Poedit](https://poedit.net/download) to translate theme messages and generate `po` and `mo` files.

> Site name and tagline are translated with `__()` function but they cannot be extracted from the php files because they are passed to the function as variables. You can manually add the name and tagline to the translation files and the should be translated correctly.

## Releasing
Use [conventional-commits](https://www.conventionalcommits.org/) specification to structure your commit messages. This will help generating the `CHANGELOG.md` and bump the new version of your code.

```bash
npm run release # to release a new version
``` 
