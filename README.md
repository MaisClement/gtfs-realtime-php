ℹ️ This is an updated version of [gtfs-realtime-php By @sebastianknopf](https://github.com/sebastianknopf/gtfs-realtime-php) and [gtfs-realtime-proto3 By @brians-code](https://github.com/brians-code/gtfs-realtime-proto3).


# GTFS Realtime PHP
Simple wrapper for GTFS-Realtime in PHP based on Google's [Protocol Buffers](https://github.com/protocolbuffers/protobuf-php).


## Usage
The library is kept simple to use for creating and parsing GTFS-Realtime feeds in PHP applications. See
the simple examples for [creating](/examples/create_message.php) and [parsing](/examples/parse_message.php) a feed message.


### Composer Installation
In your application project root run
```
composer require lowa/gtfs-realtime-php
```
to install the package and all dependencies. This command will load all packages and update
your autoloader to use the package.

Include ```[MainDirectory]/vendor/autoload.php``` in the head section of your application code to use all required classes in simple way.


### Explaination
This is a simple wrapper for GTFS-Realtime in PHP modified to be compatible with Google library. The gtfs-realtime.proto was edited to match with proto3 definitions.

- Step 1: Remove all 'optional' labels since all fields are optional
- Step 2: Remove all 'required' labels since all fields are optional
- Step 3: Remove all 'extensions' ranges, see https://developers.google.com/protocol-buffers/docs/proto3#any
- Step 4: Remove all explicit default values, see https://developers.google.com/protocol-buffers/docs/proto3#default
- Step 5: Set first value in all enums to PROTO3_DEFAULT_[VARNAME] = 0 to supply implicit default value, see https://developers.google.com/protocol-buffers/docs/proto3#default

Then, using [protobuf](https://github.com/protocolbuffers/protobuf) you can generate all the files of this repo.


## License
The library package is licensed under "The Unlicense" - For the simple reason that there's
nothing in this code at all, which you could not create for yourself using Google's protoc-Compiler
and the corresponding definition file for GTFS-Realtime.