[![Rate your Sample](views/Ratesample.png)][ss1][![Yes](views/Thumbup.png)][ss2][![No](views/Thumbdown.png)][ss3]

# PHPPaymentSample

A straigtforward PHP Example for using charges.

All the logic is hosted on SampleChargeRequest.php file. 

How to run:
1. Create an account at developer.intuit.com, create an app for Payment API.
2. Go to OAuth playground: https://developer.intuit.com/v2/ui#/playground?appid={Your App ID} You can also go to OAuth playround from your app's dashboard.
3. Choose scope as Payment, Complete the flow.
4. Paste the access token to $accessToken variable, keep "Bearer ".
5. Change the body.
6. Run the script:
PHP SampleChargeRequest.php 

[ss1]: #
[ss2]: https://customersurveys.intuit.com/jfe/form/SV_9LWgJBcyy3NAwHc?check=Yes&checkpoint=PHPPaymentSample&pageUrl=github
[ss3]: https://customersurveys.intuit.com/jfe/form/SV_9LWgJBcyy3NAwHc?check=No&checkpoint=PHPPaymentSample&pageUrl=githubtSample
