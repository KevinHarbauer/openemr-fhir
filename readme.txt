to get this working on a Mac OS X local host:  Update apache config:

add Listen 8000
add NameVirtualHost 127.0.0.1:8000

added virtualhost:

 <VirtualHost 127.0.0.1:8000>
   DocumentRoot "/Applications/AMPPS/www/openemrfhir/web"
   ServerName fhir.local
   <Directory "/Applications/AMPPS/www/openemrfhir/web">
     AllowOverride All
   </Directory>
 </VirtualHost>
