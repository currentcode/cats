<?php

/* @promo/promo.twig */
class __TwigTemplate_bc7c2322fd027a1b6cd6598c6ea219561fd3f647b14d64d77de76733f43da6f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <div class=\"supsystic-item supsystic-panel supsystic-plugin supsystic-plugin-promo\">
            <div id=\"containerWrapper\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>
                            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Welcome to the"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["plugin_name"]) ? $context["plugin_name"] : null), "html", null, true);
        echo " v ";
        echo twig_escape_filter($this->env, (isset($context["plugin_version"]) ? $context["plugin_version"] : null), "html", null, true);
        echo "
                        </h2>
                        <p class=\"col-sm-6\">
                            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Photo Gallery plugin is created for people who would like to show their photos in a marvelous way. Perform your best ideas, making delightful presentations or galleries from videos and photos."), "method"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Step-by-step tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <p>
                                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "There’re really many options of photo gallery plugin customization. So as soon as you close that page, I’ll show you step-by-step tutorial of how to use plugin. Hope it will be usefull for you :)"), "method"), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"col-sm-6\">
                                <h3>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Support"), "method"), "html", null, true);
        echo "</h3>
                                <p>
                                    ";
        // line 29
        echo $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "We love our plugin and do the best to improve all features you want and fix all issues. But sometimes some issues happened or you can’t find feature you want :) Don’t worry, just <a href=\"//supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=welcomepage&utm_campaign=photo-gallery#contact\" target=\"_blank\"> contact us </a> . We’ll answer in an hour and fix all issues."), "method");
        echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Video Tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <iframe type=\"text/html\"
                                        width=\"90%\"
                                        height=\"330px\"
                                        src=\"https://www.youtube.com/embed/5bkjrlV14CE\"
                                        frameborder=\"0\">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <h3>
                            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Frequently Asked Questions"), "method"), "html", null, true);
        echo "
                        </h3>

                        <section>
                            <h4>
                                <a href=\"//supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=welcomepagefaq&utm_campaign=photogallery#faq\" target=\"_blank\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "How to use pagination and categories feature of gallery?"), "method"), "html", null, true);
        echo "</a>
                            </h4>
                            <ol>
                                <li>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Activate “Available” radio button opposite the “Pagination” or “Categories” option on the Categories tab."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Set the number of images per page."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Choose one of the default presets or create your own."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "After configuring the settings click “Save” button."), "method"), "html", null, true);
        echo "</li>
                            </ol>
                            <p>";
        // line 60
        echo $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "For more information for <a href=\"//supsystic.com/pagination/\" target=\"_blank\">Pagination</a> and for <a href=\"//supsystic.com/categories-gallery/\" target=\"_blank\">Categories</a>"), "method");
        echo "</p>
                        </section>

                        <section>
                            <h4>
                                ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "What is “Post Feed” Gallery"), "method"), "html", null, true);
        echo "
                            </h4>
                            <ol>
                                <li>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Go to Posts tab."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Select “Enable” in Posts Layout dropdown list to activate the posts option."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Choose one of post layout styles."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Add pages and posts."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Choose what to show on posts layout in gallery."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "After configuring the settings click “Save” button."), "method"), "html", null, true);
        echo "</li>
                            </ol>
                            <p>";
        // line 75
        echo $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Learn more about how to do this <a href=\"//supsystic.com/plugins/photo-gallery/#faq\" target=\"_blank\">here</a>."), "method");
        echo "</p>
                        </section>

                        <section>
                            <h4>
                                <a href=\"//supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=welcomepagefaq&utm_campaign=photogallery#faq\" target=\"_blank\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "All other FAQs"), "method"), "html", null, true);
        echo "</a>
                            </h4>
                        </section>

                        <div style=\"clear: both;\"></div>
                        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["start_url"]) ? $context["start_url"] : null), "html", null, true);
        echo "\" class=\"button button-primary button-hero\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Let's Start!"), "method"), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div style=\"clear: both;\"></div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@promo/promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 85,  179 => 80,  171 => 75,  166 => 73,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  146 => 68,  140 => 65,  132 => 60,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  109 => 52,  101 => 47,  86 => 35,  77 => 29,  72 => 27,  65 => 23,  60 => 21,  49 => 13,  39 => 10,  31 => 4,  28 => 3,);
    }
}
