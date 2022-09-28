<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a6a9cc63433db4ba07e561a6e681e24d1bbba975cb97fd44bdf39ae9851a929 extends Twig_Template
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
        $__internal_a4525c800f99e6b82df605ae7fc8fb50e17e9c38a89d34cfe2f390f4ee1fd533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4525c800f99e6b82df605ae7fc8fb50e17e9c38a89d34cfe2f390f4ee1fd533->enter($__internal_a4525c800f99e6b82df605ae7fc8fb50e17e9c38a89d34cfe2f390f4ee1fd533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a93bcf0a01bc6e3d123e9ba8975fb5e126f431665dfed54a09638d3b63c38747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93bcf0a01bc6e3d123e9ba8975fb5e126f431665dfed54a09638d3b63c38747->enter($__internal_a93bcf0a01bc6e3d123e9ba8975fb5e126f431665dfed54a09638d3b63c38747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a4525c800f99e6b82df605ae7fc8fb50e17e9c38a89d34cfe2f390f4ee1fd533->leave($__internal_a4525c800f99e6b82df605ae7fc8fb50e17e9c38a89d34cfe2f390f4ee1fd533_prof);

        
        $__internal_a93bcf0a01bc6e3d123e9ba8975fb5e126f431665dfed54a09638d3b63c38747->leave($__internal_a93bcf0a01bc6e3d123e9ba8975fb5e126f431665dfed54a09638d3b63c38747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
