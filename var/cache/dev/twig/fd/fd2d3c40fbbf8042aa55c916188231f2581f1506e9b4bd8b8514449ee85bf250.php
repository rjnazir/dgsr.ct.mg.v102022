<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_03ddf34e33e1781e585ce6aa0906c89208f5da2e34bb5e53c4db3dae995cbdf3 extends Twig_Template
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
        $__internal_cadcb336c50211bdc9f8318445c126eb1addb95e3c57078211d048695cace8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadcb336c50211bdc9f8318445c126eb1addb95e3c57078211d048695cace8a3->enter($__internal_cadcb336c50211bdc9f8318445c126eb1addb95e3c57078211d048695cace8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_64bba7786c98201e2473f7632ba442a28843ab417010e6c45c18ad20a1373637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bba7786c98201e2473f7632ba442a28843ab417010e6c45c18ad20a1373637->enter($__internal_64bba7786c98201e2473f7632ba442a28843ab417010e6c45c18ad20a1373637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_cadcb336c50211bdc9f8318445c126eb1addb95e3c57078211d048695cace8a3->leave($__internal_cadcb336c50211bdc9f8318445c126eb1addb95e3c57078211d048695cace8a3_prof);

        
        $__internal_64bba7786c98201e2473f7632ba442a28843ab417010e6c45c18ad20a1373637->leave($__internal_64bba7786c98201e2473f7632ba442a28843ab417010e6c45c18ad20a1373637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
