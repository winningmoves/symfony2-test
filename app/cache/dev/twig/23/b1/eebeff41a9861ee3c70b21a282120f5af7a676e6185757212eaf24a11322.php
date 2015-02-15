<?php

/* AppBundle::nav.html.twig */
class __TwigTemplate_23b1eebeff41a9861ee3c70b21a282120f5af7a676e6185757212eaf24a11322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "
\t<nav class=\"navbar navbar-default\">
\t  <div class=\"container-fluid\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"#\">Symfony Rules!</a>
\t    </div>

\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav\">
\t        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
\t        <li><a href=\"#\">Link</a></li>
\t        <!--li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">
\t            <li><a href=\"#\">Action</a></li>
\t            <li><a href=\"#\">Another action</a></li>
\t            <li><a href=\"#\">Something else here</a></li>
\t            <li class=\"divider\"></li>
\t            <li><a href=\"#\">Separated link</a></li>
\t            <li class=\"divider\"></li>
\t            <li><a href=\"#\">One more separated link</a></li>
\t          </ul>
\t        </li-->
\t      </ul>
\t      <!--form class=\"navbar-form navbar-left\" role=\"search\">
\t        <div class=\"form-group\">
\t          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t        </div>
\t        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t      </form-->
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">
\t            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t        Logout
\t\t\t    </a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>

";
        } else {
            // line 55
            echo "
    <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>

";
        }
    }

    public function getTemplateName()
    {
        return "AppBundle::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  82 => 55,  68 => 44,  63 => 42,  21 => 2,  19 => 1,);
    }
}
