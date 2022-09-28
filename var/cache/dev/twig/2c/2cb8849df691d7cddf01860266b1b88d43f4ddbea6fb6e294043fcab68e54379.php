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
        $__internal_f44375670c10fe0d763ac0ad0daf05cec4e4b0dea84b667c6dd3d68d5e56c171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44375670c10fe0d763ac0ad0daf05cec4e4b0dea84b667c6dd3d68d5e56c171->enter($__internal_f44375670c10fe0d763ac0ad0daf05cec4e4b0dea84b667c6dd3d68d5e56c171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b8cc7c3768f96e7a95de89f1ac34a9cba5941507b100f9bcef5cc07d44ad20d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cc7c3768f96e7a95de89f1ac34a9cba5941507b100f9bcef5cc07d44ad20d3->enter($__internal_b8cc7c3768f96e7a95de89f1ac34a9cba5941507b100f9bcef5cc07d44ad20d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f44375670c10fe0d763ac0ad0daf05cec4e4b0dea84b667c6dd3d68d5e56c171->leave($__internal_f44375670c10fe0d763ac0ad0daf05cec4e4b0dea84b667c6dd3d68d5e56c171_prof);

        
        $__internal_b8cc7c3768f96e7a95de89f1ac34a9cba5941507b100f9bcef5cc07d44ad20d3->leave($__internal_b8cc7c3768f96e7a95de89f1ac34a9cba5941507b100f9bcef5cc07d44ad20d3_prof);

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
