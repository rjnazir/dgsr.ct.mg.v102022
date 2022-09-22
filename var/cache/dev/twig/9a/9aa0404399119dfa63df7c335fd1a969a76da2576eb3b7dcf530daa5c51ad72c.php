<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d4e911cf1a835405a8e1b729b638480fa0f9b7dcc57640c5ede6bc79fa14298c extends Twig_Template
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
        $__internal_b0afb81acf4b139d819d7ab19cc8c6a5f0881b8f3ea78c1f88dbdd2c1ff2f2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0afb81acf4b139d819d7ab19cc8c6a5f0881b8f3ea78c1f88dbdd2c1ff2f2e7->enter($__internal_b0afb81acf4b139d819d7ab19cc8c6a5f0881b8f3ea78c1f88dbdd2c1ff2f2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cc8fe32e8d6cffd1311375b2c25424e31156411377b9c271cf69f89060bb75d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8fe32e8d6cffd1311375b2c25424e31156411377b9c271cf69f89060bb75d2->enter($__internal_cc8fe32e8d6cffd1311375b2c25424e31156411377b9c271cf69f89060bb75d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0afb81acf4b139d819d7ab19cc8c6a5f0881b8f3ea78c1f88dbdd2c1ff2f2e7->leave($__internal_b0afb81acf4b139d819d7ab19cc8c6a5f0881b8f3ea78c1f88dbdd2c1ff2f2e7_prof);

        
        $__internal_cc8fe32e8d6cffd1311375b2c25424e31156411377b9c271cf69f89060bb75d2->leave($__internal_cc8fe32e8d6cffd1311375b2c25424e31156411377b9c271cf69f89060bb75d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
