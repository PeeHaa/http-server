#!/usr/bin/env bash

wget https://github.com/summerwind/h2spec/releases/latest/download/h2spec_linux_amd64.tar.gz
tar -xzf h2spec_linux_amd64.tar.gz
php ../test/test-server.php &
SERVER_PID=$!
./h2spec -p 1338 --tls --insecure --strict
kill ${SERVER_PID}
