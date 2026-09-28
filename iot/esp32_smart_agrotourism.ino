#include <WiFi.h>
#include <HTTPClient.h>
const char* WIFI_SSID="YOUR_WIFI"; const char* WIFI_PASS="YOUR_PASSWORD";
const char* API="http://YOUR_SERVER/api/iot/readings"; const char* DEVICE="SOLOK-001";
void setup(){Serial.begin(115200);WiFi.begin(WIFI_SSID,WIFI_PASS);while(WiFi.status()!=WL_CONNECTED)delay(500);}
void loop(){if(WiFi.status()==WL_CONNECTED){HTTPClient http;http.begin(API);http.addHeader("Content-Type","application/json");float soil=67.0,temp=25.8,hum=72,ph=6.4,rain=2.5,water=75;String json="{\"device_code\":\""+String(DEVICE)+"\",\"soil_moisture\":"+String(soil)+",\"temperature\":"+String(temp)+",\"humidity\":"+String(hum)+",\"ph\":"+String(ph)+",\"rainfall\":"+String(rain)+",\"water_level\":"+String(water)+"}";Serial.println(http.POST(json));http.end();}delay(60000);}
