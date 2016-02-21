<?php

/* base.twig */
class __TwigTemplate_d501978811c016a552e089491ab1bff9f923163e38130d6c6396194c88bb1665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 3,  23 => 2,  20 => 1,  187 => 85,  179 => 80,  171 => 75,  166 => 73,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  146 => 68,  140 => 65,  132 => 60,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  109 => 52,  101 => 47,  86 => 35,  77 => 29,  72 => 27,  65 => 23,  60 => 21,  49 => 13,  39 => 10,  31 => 4,  28 => 3,);
    }
}
