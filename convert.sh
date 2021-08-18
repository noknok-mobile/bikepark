#!/bin/sh

#для конвертации .php в .pug

list=$(find . -name '*.php')
for name in $list
do
html2pug -t -f < $name > "src/$name.pug"
done
rename 's/.php//' src/*.php.pug