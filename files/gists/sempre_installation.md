# SEMPRE 2.4: Semantic Parsing with Execution


# Installation

## Requirements

You must have the following already installed on your system.

- Java 8 (not 7)
- Ant 1.8.2
- Ruby 1.8.7 or 1.9
- wget
- make (for compiling fig and Virtuoso)
- zip (for unzip downloaded dependencies)

Other dependencies will be downloaded as you need them.  SEMPRE has been tested
on Ubuntu Linux 12.04 and MacOS X.  Your mileage will vary depending on how
similar your system is.

## Easy setup

1. Install dependencies
```sh
sudo apt-get install ruby-full
sudo apt-get install zip
sudo apt-get install openjdk-8-jdk
sudo apt-get install ant
sudo apt-get install make
```

2. Clone the GitHub repository:

        git clone https://github.com/percyliang/sempre

3. Download the minimal core dependencies (all dependencies will be placed in `lib`):

        cd sempre
        sudo ./pull-dependencies core
        sudo ./pull-dependencies corenlp

4. Compile the source code (this produces `libsempre/sempre-core.jar`):

        ant core

5. Run an interactive shell:

        ./run @mode=simple

    You should be able to type the following into the shell and get the answer `(number 7)`:

        (execute (call + (number 3) (number 4)))
