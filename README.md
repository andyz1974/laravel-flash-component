# laravel-flash-component
A simple blade component which checks if there is a session message and what type of message it is (success, error, info) and then flashes a message for the time set. If no time is set, user must close it by clikcing on 'x'.
Default type is succes. If you want to change it to "error" or "info" you must add the attribute type="" when tou call the component. 

Examples: 
``<x-admin.alerts.flash timeout=3 />`` //shows a success message for 3 seconds

``<x-admin.alerts.flash type="error" timeout=1 />`` //shows an error message for 1 second

``<x-admin.alerts.flash type="info" />`` //shows an info message until you press x to close it
