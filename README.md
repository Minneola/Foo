# Foo Stupid Project
Dieses Repository dient zur Nutzung des eigentlichen [Projektes: TestForTransfer](https://github.com/Minneola/TestForTransfer).

# Installation
Zun�chst dieses [Repository](https://github.com/Minneola/Foo/archive/master.zip) herunterladen und in einem Ordner entpacken.
Alternativ per Git Shell:
```
git clone https://github.com/Minneola/Foo.git
```

Dann �ber die Konsole das "Framework" laden:
```
composer install
```

Und los gehts!

## Breads
Es k�nnen sogenannte Breads erstellt werden.
```php
```

## Smiles
Define your Smiles:
```php
Smile::get('/', function()
{
    // Do Something here
});

// Use a Controller
Smile::get('/', 'SiffController@index');

```
