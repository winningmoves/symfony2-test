<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_cb7eb608e284c3d005f39f34e5527b9637b078059a94ae3c654c078dacc6292c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\" slick-uniqueid=\"3\">
\t<head>
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>

\t    <!-- Bootstrap -->
\t    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
\t    <link rel=\"stylesheet\" href=\"/css/darkly-bootstrap.min.css\">

\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t    <style>
\t    p {
\t\t\tmargin: 0 0 10px;
\t\t\tfont-size: 17px;
\t\t\tline-height: 31px;
\t\t}
\t\t
\t\t.h1, .h2, .h3, h1, h2, h3 {
\t\t\tmargin-top: 30px;
\t\t\tmargin-bottom: 10px;
\t\t}
\t    </style>
\t    
\t</head>
\t<body>
\t\t<div id=\"content\" class=\"container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t";
        // line 37
        echo twig_include($this->env, $context, "AppBundle::nav.html.twig");
        echo "

\t        </div>

\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 42
        $this->displayBlock('navigation', $context, $blocks);
        // line 43
        echo "\t\t\t</div>

\t \t\t";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "\t \t\t
\t \t</div>
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
\t</body>
 </html>";
    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 45,  89 => 42,  78 => 46,  76 => 45,  72 => 43,  70 => 42,  62 => 37,  28 => 6,  21 => 1,);
    }
}
