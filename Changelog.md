#Change Log

#####Team membership:  

    - SK[Shawn(Dongwon) Kim] (Captain)
    - GL[Jia Qi Lee (NamBlue)] (Mate)
    - SM[Steven Ma] (Mate)

Team conventions: Allman notation, markdown for changelog  
Changelog format: [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) 

Date format is: MM.DD.YY

## Log Changes
1. SK: Initialized the changelog.md 

## Version Log
### Version 1.0 - SK, GL
Release Date: 10.06.17

##### New Components
    - controllers     
        - Info
    - model     
        - Fleet_Model
        - Flight_Model
    - view
        - N/A
    
##### Updated Components
    - controllers
        - N/A
    - model
        - N/A
    - views
        - N/A

### Version 1.1 - SK
Release Date: 10.07.17

##### New Components
    - controllers     
        - N/A
    - model     
        - Airlines_Model
        - Airplanes_Model
        - Airports_Model
        - Regions_Model
    - view
        - N/A
    
##### Updated Components
    - controllers
        - N/A
    - model
        - Fleet_Model(deleted)
        - Flight_Model(deleted)
    - views
        - N/A

### Version 1.2 - SK
Release Date: 10.08.17

##### New Components
    - controllers     
        - Fleet
        - Flights
    - model
        - Fleet_Model(recreated)
        - Flights_Model
    - view
        - fleet
        - plane
        - flights
    
##### Updated Components
    - controllers
        - N/A
    - model
        - Fleet(renamed)
        - Airline(renamed)
        - Airplane(renamed)
        - Airport(renamed)
        - Region(renamed)
    - views
        - homepage view created and fixed
        - aboutpage view created
        - fleetpage view created
        - flightpage view created
        - template view fixed

### Version 1.2.1 - SM
Release Date: 11.10.17
    - bugfixes
        - Model naming convention changed
        - Model key naming convention changed

### Version 2.0.0 - SM
Release Date: 11.09.17

##### New Components
    - controllers
        - Fleet
        - Flights
    - model
        - Fleet_Model(recreated)
        - Flights_Model
    - view
        - fleet
        - plane
        - flights

##### Updated Components
    - controllers
        - Roles added
    - model
        - Fleet(renamed)
        - Airline(renamed)
        - Airplane(renamed)
        - Airport(renamed)
        - Region(renamed)
    - views
        - fleetadd added
	- flightadd added
    - Other
	- Added session and parsedown to autoload libraries
	- Added Admin and Guest constants

### Version 2.0.0 - SK
Release Date: 11.10.17

#### New Components
    - public
        - assets
            - css
                - bootstrap.min.css
                - bootstrap-responsive.min.css

##### Updated Components
    - controllers
        - Welcome.php
    - views
        - homepage.php
        - template.php
    - public
            - assets
                - css
                    - style.css