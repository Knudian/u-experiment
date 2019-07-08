# Behat + Symfony

## Behat

### Why ?

Behat is the module that'll interpret the features written in the gherkin language.

### Installation 

Run the following command to add behat to the project.

```cmd
composer req behat/behat --dev
```

## Mink

!IMPORTANT! : Optional since we'll adapt our code to work without front-end.

### Why ? 

Mink is there to simulate the interaction between our application and behat

### Installation

Run the following command to add mink to the project.

```cmd
composer req behat/mink --dev
```

## Behat symfony2-extension

### Why ?

THe Symfony2Extension is there to provide a link between symfony and behat, make sur they work well together.

Even though we are working with symfony 4, it's still this extension that is used.

Once installed the package should generate both the features folder and the behat.yml.dist file in which the behat configuration is located.

### Installation

Run the following command to add behat to the project.

```cmd
composer req behat/symfony2-extension --dev
```

We'll then make a copy of behat.yml.dist to behat.yml that'll modify to make it work.

## Mink browserKit Driver

!IMPORTANT! : Optional since we'll adapt our code to work without front-end.

### Why ?

BrowserKit Driver is the symfony component to emulate the browser

### Installation

Run the following command :
```cmd
composer req behat/mink-browserkit-driver --dev
```

## Behat-mink

!IMPORTANT! : Optional since we'll adapt our code to work without front-end.

### Why ?

Behat-Mink is an integration layer between behat and mink, it's to make them work better together. 

### Installation

Run the following command : 

```cmd
composer req behat/mink-extension --dev
```

And then adjust Behat as follow :

```Gherkin
default:
  suites:
    default:
      contexts:
        - FeatureContext:
            kernel: '@kernel'
        - Behat\MinkExtension\Context\MinkContext
  extensions:
    Behat\Symfony2Extension:
      kernel:
        bootstrap: features/bootstrap/bootstrap.php
        class: App\Kernel
    Behat\MinkExtension:
      base_url: "http://example.com/"
      sessions:
        default:
          symfony2: ~
```

## Behatch context

### Why ?

This package is there to extend behat capability by allowing the treatment of things like JSON, Xml and so on ...

### Installation

Run the following command : 

```cmd
composer req behatch/contexts --dev
```

## Features

Features are scenarios used by behat to run the tests we want for our application.

They are located in the directory feature and are written following the Gherkin language.

## Test

### Write the tests

In php, the test will be located in the features/bootstrap/FeatureContext.php

### Run the tests

To run the tests we are going to run the following command

```cmd
vendor/bin/behat
```

It should work ...