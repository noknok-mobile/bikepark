#!/bin/sh

pug src -P --out $1
rm -r $1/template/
cp -r src/css src/js src/img src/fonts $1
