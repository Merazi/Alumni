#!/usr/bin/bash
java -jar schemaspy-6.1.0.jar \
	-t mysql \
	-dp ./mysql-connector-java-8.0.28.jar \
	-db alumni_1 \
	-host localhost \
	-u $USER \
	-o outputDir \
	-s alumni_1
