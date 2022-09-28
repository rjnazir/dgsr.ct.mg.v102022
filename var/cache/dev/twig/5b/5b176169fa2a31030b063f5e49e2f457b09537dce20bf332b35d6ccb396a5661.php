<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2f8c0719122ef92bf43a98e6012a432b3d15f4837d976088f6cdaea2a9aa655a extends Twig_Template
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
        $__internal_3ed2adf3454149bdf60e1cc1345d35ed994b6c8546d4797b1d8ef194fa058e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed2adf3454149bdf60e1cc1345d35ed994b6c8546d4797b1d8ef194fa058e16->enter($__internal_3ed2adf3454149bdf60e1cc1345d35ed994b6c8546d4797b1d8ef194fa058e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f5155b78f4b6f4dd537ac3561d45509e542841b93be850909a346785a677856a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5155b78f4b6f4dd537ac3561d45509e542841b93be850909a346785a677856a->enter($__internal_f5155b78f4b6f4dd537ac3561d45509e542841b93be850909a346785a677856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3ed2adf3454149bdf60e1cc1345d35ed994b6c8546d4797b1d8ef194fa058e16->leave($__internal_3ed2adf3454149bdf60e1cc1345d35ed994b6c8546d4797b1d8ef194fa058e16_prof);

        
        $__internal_f5155b78f4b6f4dd537ac3561d45509e542841b93be850909a346785a677856a->leave($__internal_f5155b78f4b6f4dd537ac3561d45509e542841b93be850909a346785a677856a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
