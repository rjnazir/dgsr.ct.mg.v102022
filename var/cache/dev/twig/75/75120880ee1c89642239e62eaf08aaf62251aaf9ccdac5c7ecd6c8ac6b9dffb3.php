<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5208177d7cdc2c4133c724edbe0ef4096fbd053046f551af5534aa29e292b424 extends Twig_Template
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
        $__internal_cc0017f03fc82f54e697f3838d6904c414f81418245abde2e5ce7c3388eee938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0017f03fc82f54e697f3838d6904c414f81418245abde2e5ce7c3388eee938->enter($__internal_cc0017f03fc82f54e697f3838d6904c414f81418245abde2e5ce7c3388eee938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ff4ee182c7cd83913b69c6edd98e434c7eb17f1810752ae4544938651d02d086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4ee182c7cd83913b69c6edd98e434c7eb17f1810752ae4544938651d02d086->enter($__internal_ff4ee182c7cd83913b69c6edd98e434c7eb17f1810752ae4544938651d02d086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc0017f03fc82f54e697f3838d6904c414f81418245abde2e5ce7c3388eee938->leave($__internal_cc0017f03fc82f54e697f3838d6904c414f81418245abde2e5ce7c3388eee938_prof);

        
        $__internal_ff4ee182c7cd83913b69c6edd98e434c7eb17f1810752ae4544938651d02d086->leave($__internal_ff4ee182c7cd83913b69c6edd98e434c7eb17f1810752ae4544938651d02d086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
