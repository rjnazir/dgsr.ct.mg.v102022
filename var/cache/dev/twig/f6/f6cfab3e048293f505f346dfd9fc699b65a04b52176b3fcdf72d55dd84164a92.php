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
        $__internal_c9270960484ba092f348751f312cf9a7443e7a48ea7484c38e1d35be2dae7a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9270960484ba092f348751f312cf9a7443e7a48ea7484c38e1d35be2dae7a04->enter($__internal_c9270960484ba092f348751f312cf9a7443e7a48ea7484c38e1d35be2dae7a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_71e94b08fd16cd6807ea7e2680caf1e92f734a7ebbcd402c1d95b28ab36685f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e94b08fd16cd6807ea7e2680caf1e92f734a7ebbcd402c1d95b28ab36685f2->enter($__internal_71e94b08fd16cd6807ea7e2680caf1e92f734a7ebbcd402c1d95b28ab36685f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c9270960484ba092f348751f312cf9a7443e7a48ea7484c38e1d35be2dae7a04->leave($__internal_c9270960484ba092f348751f312cf9a7443e7a48ea7484c38e1d35be2dae7a04_prof);

        
        $__internal_71e94b08fd16cd6807ea7e2680caf1e92f734a7ebbcd402c1d95b28ab36685f2->leave($__internal_71e94b08fd16cd6807ea7e2680caf1e92f734a7ebbcd402c1d95b28ab36685f2_prof);

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
