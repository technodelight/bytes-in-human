# bytes-in-human
Render bytes in human readable format with using a simple value object

## Installation

With composer, simply:
```
composer require technodelight/bytes-in-human
```

## Usage

 Using this library is as simple as:
 
 ```
 <?php
 
 use Technodelight\BytesInHuman\BytesInHuman;
 
 $bytes = BytesInHuman::fromBytes(1024);
 echo $bytes->asString(); // 1.00K
 echo $bytes; // 1.00K, as it's converted to string with __toString magic method 
 ```
 
# License
The MIT License (MIT)

Copyright (c) 2015-2018 Zsolt Gál

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.