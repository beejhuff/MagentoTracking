MagentoTracking
===============

[![Master Build Status](https://travis-ci.org/jamescowie/MagentoTracking.svg?branch=master)](http://travis-ci.org/jamescowie/MagentoTracking)

# About
During my time working with Magento one of the most common requests I get as a developer is to add tracking code to areas of the website,
This has commonly been header or footer with some tweaks made to the checkout pages and product pages for specific details.

Looking at other implementations either lots of custom modules are developed for all the different tracking codes with custom blocks and templates files
Or the modules are bypassed and all work is done directly in the template file. Over time these modules and template become hard for the product
owner to understand
- What tracking is enabled on the website at any one time.
- Where the tracking is enabled on the site
- What actual code is enabled on the site

# Implementation
This module should overcome the majority of requirements but allowing a product owner the visibility and administration of tracking code on the
magento web store. Via an adminhtml grid the users can see what tracking code is enabled / installed on the store. When it was added and
what the code looks like. They can enabled / disable at any time. The end user can also update the section that the tracking code should be installed
withing E.g. head / footer.

# Future Enhancements
Once I have the basic requirements completed with a fully PHPSpec and Behat driven module I would like to add new fatures that allow
variables to be injected into the tracking and to target specific pages / layout handles with the tracking implementation.

# Feedback
If you have any feedback or issues please use githubs issue tracker and raise a new issue with as much detail as possible.