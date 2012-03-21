<?php

/* testTaskBundle:Default:index.html.twig */
class __TwigTemplate_ff840bd5de83144e3df567d7f87372b7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testTaskBundle_createtask"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" value=\"Save\">
</form>
";
    }

    public function getTemplateName()
    {
        return "testTaskBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
