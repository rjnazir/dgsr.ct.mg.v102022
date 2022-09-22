<?php

/* AdminBundle:CtCentre:edit.html.twig */
class __TwigTemplate_e4577fd03bcdcb9c89d97d33bc4962a942ba81b4ff6103a681de6d479701ff22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ace8190d78bf45e30477ce0a6b376288d922f708676f91a45d4947a7940dd9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace8190d78bf45e30477ce0a6b376288d922f708676f91a45d4947a7940dd9e5->enter($__internal_ace8190d78bf45e30477ce0a6b376288d922f708676f91a45d4947a7940dd9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        $__internal_d8383b72446ef86dd4bc67923770e87217a001a6078e909ae12afe790d5658c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8383b72446ef86dd4bc67923770e87217a001a6078e909ae12afe790d5658c5->enter($__internal_d8383b72446ef86dd4bc67923770e87217a001a6078e909ae12afe790d5658c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace8190d78bf45e30477ce0a6b376288d922f708676f91a45d4947a7940dd9e5->leave($__internal_ace8190d78bf45e30477ce0a6b376288d922f708676f91a45d4947a7940dd9e5_prof);

        
        $__internal_d8383b72446ef86dd4bc67923770e87217a001a6078e909ae12afe790d5658c5->leave($__internal_d8383b72446ef86dd4bc67923770e87217a001a6078e909ae12afe790d5658c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_046b34398ed5ac9f846ea5175d1a7e795d2b961d7841c8b6ad98e28e5570cd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046b34398ed5ac9f846ea5175d1a7e795d2b961d7841c8b6ad98e28e5570cd83->enter($__internal_046b34398ed5ac9f846ea5175d1a7e795d2b961d7841c8b6ad98e28e5570cd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc9d6f233279e694e9eac2c06bfa23ca21eef24823b71eba784c4f4a16a36dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9d6f233279e694e9eac2c06bfa23ca21eef24823b71eba784c4f4a16a36dd4->enter($__internal_bc9d6f233279e694e9eac2c06bfa23ca21eef24823b71eba784c4f4a16a36dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_bc9d6f233279e694e9eac2c06bfa23ca21eef24823b71eba784c4f4a16a36dd4->leave($__internal_bc9d6f233279e694e9eac2c06bfa23ca21eef24823b71eba784c4f4a16a36dd4_prof);

        
        $__internal_046b34398ed5ac9f846ea5175d1a7e795d2b961d7841c8b6ad98e28e5570cd83->leave($__internal_046b34398ed5ac9f846ea5175d1a7e795d2b961d7841c8b6ad98e28e5570cd83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_995141ae742a57c009f79b1b7b7aab97c6d36b425667faefcade021ad9674c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995141ae742a57c009f79b1b7b7aab97c6d36b425667faefcade021ad9674c2a->enter($__internal_995141ae742a57c009f79b1b7b7aab97c6d36b425667faefcade021ad9674c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_238d57c94007bb18583dd5d36acf1917497df2d914b6d5521824e2c29cf04d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238d57c94007bb18583dd5d36acf1917497df2d914b6d5521824e2c29cf04d02->enter($__internal_238d57c94007bb18583dd5d36acf1917497df2d914b6d5521824e2c29cf04d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_238d57c94007bb18583dd5d36acf1917497df2d914b6d5521824e2c29cf04d02->leave($__internal_238d57c94007bb18583dd5d36acf1917497df2d914b6d5521824e2c29cf04d02_prof);

        
        $__internal_995141ae742a57c009f79b1b7b7aab97c6d36b425667faefcade021ad9674c2a->leave($__internal_995141ae742a57c009f79b1b7b7aab97c6d36b425667faefcade021ad9674c2a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctProvince) }}
                        {{ form_row(edit_form.ctrNom) }}
                        {{ form_row(edit_form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/edit.html.twig");
    }
}
