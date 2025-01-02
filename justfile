#!/usr/bin/env just --justfile
# https://github.com/casey/just

set dotenv-required
set dotenv-load
#set export   ... to export all variables below as the environment variables
alias b:= build
alias br:= run
alias t:= test
dirpath:= "/mnt/sda3/"

hello:
	echo "run"

clean: 
	rm -rf vendor
remove: 
	rm composer.lock

install:
  pnpm install
installViaComposer:
	echo "with existing composer.lock"
	composer install
install1:
	composer update vendor1/packagename1
update1:
	composer update --with vendor/package:2.0.1
update1b:
	composer update vendor/package:2.0.1 vendor/package2:3.0.*
remove1:
	composer remove vendor/package
reinstall1:
	composer reinstall vendor/package
update:
	echo "with no composer.lock"
	composer update
fmt:
	composer fmt
build:
	pnpm vite build
run:build
	composer run dev
test:
	composer run test
env:
	source .env
js:
  #!/usr/bin/env node
  console.log('Greetings from JavaScript!')