# JI-QA-Codeception

This is a short Acceptance Set set which could be run with Codecept and Chromedriver.

## Setup

1. Install PHP on local machine
```bash
apt update && apt upgrade
apt install php
```

1. Clone/Download repository
```bash
git clone https://github.com/jorogr/JI-QA-Codeception.git
```

2. Install Chromedriver and start local server with command:
```bash
chromedriver --port=4444 --silent --url-base=wd/hub
```

## Usage
Running the whole acceptance set with:
```bash
php codecept.phar run acceptance --steps

Or run a specific test case with:
php codecept.phar run acceptance <test_case_name>.php --steps
