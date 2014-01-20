json reading plans
======

Transformed from [devkardia's reading plans](https://github.com/devkardia/bibleplan).

PHP files are modified and run from the command line produce the json files.

Execute the file with `php *file.php*` or all of them with `find . -type f -name "*.php" -exec php {} \;`

### json format

```
'data': [array of strings],
'data2': [array of [array of strings]],
'id':Id,
'abbv':Abrrevation,
'name':Name,
'info':Info
```

## Change Log

### 0.2.2
* Add abbv attribute

### 0.2.1
* Fix reference errors
