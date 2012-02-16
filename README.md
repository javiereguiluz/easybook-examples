# easybook examples #

*«book publishing as easy as it should be»*

**[easybook](http://easybook-project.org)** is an application that lets you
easily publish books in various electronic formats. This repository showcases
its features with several sample books and documents.

## How to try easybook examples ##

Ensure that you have installed **easybook** ([see full installation 
instructions](https://github.com/javiereguiluz/easybook/blob/master/README.md)):

```
$ mkdir easybook
$ git clone http://github.com/javiereguiluz/easybook.git easybook
```

Then, clone this repository of examples:

```
$ cd ..  <-- if you are inside easybook directory
$ mkdir docs
$ git clone http://github.com/javiereguiluz/easybook-examples.git docs
```

You can now publish any of the sample books:

```
$ cd easybook
$ ./book publish easybook web --dir=../docs/
$ ./book publish easybook website --dir=../docs/
$ ./book publish easybook print --dir=../docs/
```

I will soon publish many more advanced examples of book publishing with 
**easybook**.