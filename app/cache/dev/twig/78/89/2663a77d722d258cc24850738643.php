<?php

/* testHelloBundle:Default:index.html.twig */
class __TwigTemplate_78892663a77d722d258cc24850738643 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!


";
    }

    public function getTemplateName()
    {
        return "testHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
