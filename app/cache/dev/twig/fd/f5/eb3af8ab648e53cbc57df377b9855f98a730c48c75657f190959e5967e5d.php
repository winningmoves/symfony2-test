<?php

/* AppBundle:Login:index.html.twig */
class __TwigTemplate_fdf5eb3af8ab648e53cbc57df377b9855f98a730c48c75657f190959e5967e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AppBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Login:index";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\">
\t<h1>Login</h1>
\t<form >
\t  <div class=\"form-group\">
\t    <label for=\"exampleInputEmail1\">Email address</label>
\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"exampleInputPassword1\">Password</label>
\t    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
\t  </div>
\t  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t</form>


</div>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
