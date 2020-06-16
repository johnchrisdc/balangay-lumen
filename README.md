
# Balangay Lumen
### This project is using the data from  **[flores-jacob/philippine-regions-provinces-cities-municipalities-barangays](https://github.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays)**

#### Setup
    composer install
    php artisan migrate
    php artisan db:seed --class=DataSeeder


#### End points
See [Balangay.postman_collection.json](https://github.com/johnchrisdc/balangay-lumen/blob/master/Balangay.postman_collection.json 
"Balangay.postman_collection.json")
 - regions
- regions/{region_id}
- regions/{region_id}/provinces
- provinces
- provinces/{province_id}
- provinces/{province_id}/municipalities
- municipalities
- municipalities/{municipality_id}
- municipalities/{municipality_id}/barangays
- barangays
- barangays/{barangay_id}


#### License
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

      Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

      Everyone is permitted to copy and distribute verbatim or modified
      copies of this license document, and changing it is allowed as long
      as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
      TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

      0. You just DO WHAT THE FUCK YOU WANT TO.
