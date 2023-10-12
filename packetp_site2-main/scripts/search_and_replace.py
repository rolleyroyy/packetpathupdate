#!/usr/bin/python

import os
import sys
import fileinput

if len(sys.argv) < 4:
    print 'search_and_replace <filename> <text_to_serach> <replacement_text>'
    sys.exit(-1)

path = sys.argv[1]

fileToSearch  = sys.argv[1]
textToSearchFor = sys.argv[2]

textToReplaceWith = sys.argv[3]
oldFileName  = fileToSearch + '_old'
tempFileName = fileToSearch + '_tmp'

# If there's already an 'old_' prefixed backup file there from
# a previous run, remove it...
if os.path.isfile( oldFileName ):
	os.remove( oldFileName )

tempFile = open( tempFileName, 'w' )

for line in fileinput.input( fileToSearch ):
    tempFile.write( line.replace( textToSearchFor, textToReplaceWith ) )

tempFile.close()

# Rename the original file by prefixing it with 'old_'
os.rename( fileToSearch, oldFileName )

# Rename the temporary file to what the original was named...
os.rename( tempFileName, fileToSearch )



