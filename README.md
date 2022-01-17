# Customizing BigBlueButton

## Activation BBB API

In BBB Server:

nano /usr/share/bbb-web/WEB-INF/classes/bigbluebutton.properties

serviceEnabled  = true

## BBB Notes

In BBB Server:

nano /usr/share/meteor/bundle/programs/server/assets/app/config/settings.yml

note:

  enabled: false


## BBB Logo

We store the Logo under /var/www/bigbluebutton-default/images/ in BBB Server and we define the Path of Logo in the configuration of MultiVC Plugins.


## BBB Custom Startpresentation

We store the file of the startpresentation under /var/www/bigbluebutton-default/startpresentation in BBB Server and define the path in the configuration of MultiVC Plugin.


## BBB Custom CSS File

In BBB Server:

nano /var/www/bigbluebutton-default/css/custom.css

This file is connected in MultiVC Konfiguration Plugin in ILIAS.

## Custom Logout URL in MultiVC Plugin

We define the custom Logout Link in class file ./classes/class.ilApiBBB.php. We change the variable $joinBtnUrl in method setCreateMeetingParam() to: 

$joinBtnUrl= 'https://vimuki.org';
