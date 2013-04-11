<?php 

    # Set the theme for your project's web pages.
    # See the Committer Tools "How Do I" for list of themes
    # https://dev.eclipse.org/committers/
    # Optional: defaults to system theme 
    $theme = "Nova"; 
    include("sidebar.php");

    # Additional styles
    $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/jetty/css/jetty.css"/>' . "\n");
    
    $App->SetGoogleAnalyticsTrackingCode("UA-1149868-7");
    
    $App->setOGDescription('Jetty is a highly scalable modular servlet engine and http server that natively supports many modern protocols like SPDY and WebSockets.');
    $App->setOGImage('http://www.eclipse.org/jetty/images/jetty-logo-80x22.png');
    
    # Define your project-wide Nav bars here.
    # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
    # these are optional
    # $Nav->setLinkList( array() );
    
    ## required by eclipse guidelines
    $Nav->addNavSeparator("Jetty", "/jetty/");
    # 
    $Nav->addCustomNav("About Jetty", "/jetty/about.php", "_self", 2);
    # custom links
    # $Nav->addCustomNav("jetty@eclipse", "/jetty", "_self", 2);
    $Nav->addCustomNav("Jetty Powered", "/jetty/powered", "_self", 2);
    $Nav->addCustomNav("Licenses", "/jetty/licenses.php", "_self", 2);

    $Nav->addNavSeparator("Resources", null);
    $Nav->addCustomNav("Documentation", "http://www.eclipse.org/jetty/documentation", "_self", 2);
    $Nav->addCustomNav("Downloads", "/jetty/downloads.php", "_self", 2);
    #FIXME: $Nav->addCustomNav("FAQ", "", "_self", 2);
    $Nav->addCustomNav("Mailing Lists", "/jetty/mailinglists.php", "_self", 2);
    $Nav->addCustomNav("JavaDoc", "http://download.eclipse.org/jetty/stable-9/apidocs/", "_self", 2);
    $Nav->addCustomNav("Source XRef", "http://download.eclipse.org/jetty/stable-9/xref/", "_self", 2);
    $Nav->addCustomNav("Blogs", "http://webtide.intalio.com", "_self", 2);
        
    $Nav->addNavSeparator("Project Management", null);
    $Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=rt.jetty", "_self", 2);
    # $Nav->addCustomNav("Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=""&amp;product=Jetty&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED", "_self", 2);
    $Nav->addCustomNav("IP Log", "http://www.eclipse.org/projects/ip_log.php?projectid=rt.jetty", "_self", 2);
    $Nav->addCustomNav("Source", "http://git.eclipse.org/c/jetty/org.eclipse.jetty.project.git/", "_self", 2);
    
?>
