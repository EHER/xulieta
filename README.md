🌹 Xulieta — WIP
================

**Xulieta** is a light php binary that find code snippets thought out 
documentation files — as for example `*.md`, `*.markdown` and `*.rst` 
— and lint the pieces of code, so you can find basic documentation errors.

**NOTE**: For now we just lint PHP code. 

### Installation

```shell script
composer require codelicia/xulieta 
```

### Checking for errors

<table>
<tr>
<td><img src="./meme.jpg"  alt="Xulieta" width="300" height="214"/></td> 
<td>
In order to lint the basics of documentation structure, one just needs to provide a path for a 
directory or file to be linted.

```shell script
./vendor/bin/xulieta check:erromeu <directory>
```
</td>
</tr>
</table>

### Configuration

**Xulieta** tries to find a `.xulieta.xml` file in the root of your project
with the following configuration format:

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<xulieta xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="xulieta.xsd">

    <plugin>Codelicia\Xulieta\Format\MarkdownDocumentationFormat</plugin>
    <plugin>Codelicia\Xulieta\Format\RstDocumentationFormat</plugin>

    <exclude>vendor</exclude>
    <exclude>node_modules</exclude>
</xulieta>
```

- `plugin`: listing of all formats handlers
- `exclude`: excluded directory or files

### Author

- [Jefersson Nathan](@malukenho) 
- [Alexandre Eher](@eher) 
