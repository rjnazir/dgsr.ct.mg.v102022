<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_dc9b3be844d665eb48dd6956b3b7f24caedd0a91e82917c2bea9afc32624a1bd extends Twig_Template
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
        $__internal_86273d3d1307797efb8ce866c99579cf6c535160292599d47fbc0340c1007943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86273d3d1307797efb8ce866c99579cf6c535160292599d47fbc0340c1007943->enter($__internal_86273d3d1307797efb8ce866c99579cf6c535160292599d47fbc0340c1007943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_242f1b66d794d3c9bfa0381fa96a7d1a7b71b97393bf407188dfc218965513cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242f1b66d794d3c9bfa0381fa96a7d1a7b71b97393bf407188dfc218965513cd->enter($__internal_242f1b66d794d3c9bfa0381fa96a7d1a7b71b97393bf407188dfc218965513cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_86273d3d1307797efb8ce866c99579cf6c535160292599d47fbc0340c1007943->leave($__internal_86273d3d1307797efb8ce866c99579cf6c535160292599d47fbc0340c1007943_prof);

        
        $__internal_242f1b66d794d3c9bfa0381fa96a7d1a7b71b97393bf407188dfc218965513cd->leave($__internal_242f1b66d794d3c9bfa0381fa96a7d1a7b71b97393bf407188dfc218965513cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
