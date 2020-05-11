#!/usr/local/bin/python3

import json

print('Content-type: text/html\nAccess-Control-Allow-Origin: *\n')
print("\n\n")
print(json.JSONEncoder().encode({"a": "aaa", "b": "bbb"}))
print('\n')
