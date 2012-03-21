<?php

/* testHelloBundle:Default:profile.html.twig */
class __TwigTemplate_1cf4838298cf5b401889af749697ed91 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "This is ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " profile";
    }

    public function getTemplateName()
    {
        return "testHelloBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
