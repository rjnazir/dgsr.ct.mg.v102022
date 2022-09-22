<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_106b1fc7ee2d173de3ace9386bf3b93b6e85e899dd5f0a6f1576cdc07b297fbe extends Twig_Template
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
        $__internal_bf071e0f4c6140bcf25ee9ad32e45d4df13e6972c1d0fa3a471862fc72cd3247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf071e0f4c6140bcf25ee9ad32e45d4df13e6972c1d0fa3a471862fc72cd3247->enter($__internal_bf071e0f4c6140bcf25ee9ad32e45d4df13e6972c1d0fa3a471862fc72cd3247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e6ba0ce6687dc68e3a8f9e37ad9ed7bd945d4e0ce575b9064f062adfcbac3c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ba0ce6687dc68e3a8f9e37ad9ed7bd945d4e0ce575b9064f062adfcbac3c11->enter($__internal_e6ba0ce6687dc68e3a8f9e37ad9ed7bd945d4e0ce575b9064f062adfcbac3c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bf071e0f4c6140bcf25ee9ad32e45d4df13e6972c1d0fa3a471862fc72cd3247->leave($__internal_bf071e0f4c6140bcf25ee9ad32e45d4df13e6972c1d0fa3a471862fc72cd3247_prof);

        
        $__internal_e6ba0ce6687dc68e3a8f9e37ad9ed7bd945d4e0ce575b9064f062adfcbac3c11->leave($__internal_e6ba0ce6687dc68e3a8f9e37ad9ed7bd945d4e0ce575b9064f062adfcbac3c11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
