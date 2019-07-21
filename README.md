[![](https://img.shields.io/maintenance/yes/2016.svg)](https://github.com/fritzmg/contao-default-densities)
[![](https://img.shields.io/packagist/v/fritzmg/contao-default-densities.svg)](https://packagist.org/packages/fritzmg/contao-default-densities)
[![](https://img.shields.io/packagist/dt/fritzmg/contao-default-densities.svg)](https://packagist.org/packages/fritzmg/contao-default-densities)

Contao Default Densities
=====================

This Contao extension replaces the Contao\\Picture class in order to be able to define default pixel densities/scale factors.

Contao 3.4 and upwards provide the possibility to use automatically generated responsive image sets. These must be defined in the theme's setting. However, if an editor needs to or wants to set the size of an image individually, he cannot rely on those. Thus the generated image will be a plain image and potentially look bad on devices with a dppx greater than 1. With this extension you can optionally define default pixel densities/scale factors which then will be used for any such custom sized images.

This functionality is already built into Contao 4.
