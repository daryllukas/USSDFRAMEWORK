## Welcome to GitHub Pages

You can use the [editor on GitHub](https://github.com/Patrick1Rhode/USSDFRAMEWORK/edit/master/README.md) to maintain and preview the content for your website in Markdown files.

The first server request starts from a 0 and it adds by one everytime you send the request to the server.

### Creating a menu

Below we are creating a first menu the user is going to see, when he dials the short-code.

```markdown
if($handler->getSequence()=="0"){
        //
        $handler->setUssd_body("Hello World");
        $handler->setRequest_type("REQUEST");
        $handler->setSequence("1");
        $handler->setEnd_of_session("FALSE");
        echo getResponse($handler);
    }
```

For more details email me sikalindapatrick@gmail.com

### Jekyll Themes

(https://github.com/Patrick1Rhode/USSDFRAMEWORK/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
