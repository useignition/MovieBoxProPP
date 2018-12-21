# MovieBoxPro++

The original tweak for getting MovieBoxPro VIP for free.

## Getting Started

Currently you are required to have a Windows, Linux or macOS computer with Charles Proxy installed to get this running.

We are working on getting a public version running so you only need to enter a few numbers into your device to use it.

### Prerequisites

MovieBoxPro++ requires the following things to work.

```
Charles Proxy
A local webserver with PHP and CURL.
MovieBoxPro on installed on your device. You can get it from https://app.ignition.fun
```

### Setting up

Here is a step by step tutorial of setting up MovieBoxPro++

Setting up Charles Proxy

Open Charles Proxy and go to **Proxy** in the top bar where **File**, **Edit**, etc are and click on Access Control.

You will get a popup which says something like IP Range. Click add and type  `0.0.0.0/0` and click add again and type `::/0` then click underneath `::/0` then press Done. Now open Access Control again just to make sure it added both the entries. If it did press `Ok` again.

Next go to **Proxy** in the top bar and press `SSL Proxying Settings`. You'll get a popup which will say something like `Location`.
Press `add` and for `Host` type `*` and for `Port` type `*`.
Press `add` and for `Host` type `api.movieboxpro.app` and for `Port` type `443`.
Press `add` again the for `Host` type `api.movieboxpro.app` and for `Port` type `*`.

It should look like this
```
*:*
api.movieboxpro.app:443
api.movieboxpro.app:*
```
Press `Ok` then reopen `SSL Proxying Settings` and check if both entries are there and if they are press `Ok` and if they aren't try adding them again.

Now go to **Tool** in the top bar and click **Map Remote** in the popup press **Enable Map Remote** then press the **Import** button and choose the `Map Remote.xml` file you downloaded from this repository.
Now double click on `http://192.168.3.120:80` and replace `192.168.3.120` with your local ip address.
Then press `Ok` and then reopen **Map Remote** and check if the entry is there with your IP, if it is press `Ok` and if it's not try again.

Next you want to setup your local server.
You can Google how to setup WAMP, LAMP, XAMPP or MAMP etc.
Once you've set one of them up go to the htdocs folder and just copy the `MovieBoxPro++` folder into the htdocs folder.

Now you want to go onto your iOS Device and go to Settings -> WiFi -> Your Wi-Fi Network and press the ( i ) -> HTTP Proxy -> Configure Proxy -> Manual -> Server = Your Computer's IP and Port = 8888 -> Save
Then open safari and go to chls.pro/ssl and install the profile, then go to Settings -> General -> About -> Certificate Trust Settings and enable the certificate you just added.

Then open MovieBoxPro and press the button on the right hand side of the navigation bar. You should now see `Ignition Tweaks`. FYI you may need to login.

Please note, you may experience things like other apps not working etc when using this method. 

To fix this you can set the proxy as automatic under settings and set the url to 

https://ignition.fun/vip.php?ip=your_computers_ip

## Authors

* **Ignition** - *Initial Tweak* - [Twitter](https://twitter.com/useignition)
* 
## License

This project is licensed under the GPL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details
