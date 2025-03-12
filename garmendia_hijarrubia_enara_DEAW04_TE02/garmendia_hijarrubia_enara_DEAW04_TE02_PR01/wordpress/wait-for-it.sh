#!/bin/bash
# wait-for-it.sh
# Script to wait until a service is available

# Usage:
# ./wait-for-it.sh host:port -- command_to_run_when_ready

host="$1"
shift
port="${host#*:}"
host="${host%:*}"

# Try to connect to the host:port
while ! nc -z $host $port; do
    echo "Waiting for $host:$port..."
    sleep 2
done

echo "$host:$port is available"
exec "$@"
