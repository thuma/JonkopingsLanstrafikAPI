JonkopingsLanstrafikAPI
=======================

Jönköpings Länstrafik API

Files:

names.json All stops with name only. 

ids.json All stops with name and Jönköpings Länstrafik stopID.

coord.json All stops with name and Jönköpings Länstrafik ID and RT90 position.

coord-gtfs.json All stops with name and Jönköpings Länstrafik ID and RT90 position and WGS84 postion.

coord-wgs84.json All stops with all the above + gtfs id (swedish national stop id).


jltgetallstations.php Gets names, ids, and RT90 postion.

addwgs84.php Takes the RT90 and recalculates it to WGS84.

addgtfsid.php Maps the national id to the local id.


jltrealtid.php Uses Jönköpings Länstrafik stopID to show realtime buss departure.

