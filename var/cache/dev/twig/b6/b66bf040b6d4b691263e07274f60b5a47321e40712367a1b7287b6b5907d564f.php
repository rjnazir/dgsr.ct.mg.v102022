<?php

/* @Admin/CtCentre/edit.html.twig */
class __TwigTemplate_11485938e26a55127235c097657231307d909939bb72e9b17535d8300206c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCentre/edit.html.twig", 1);
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
        $__internal_e80cb1543cd256747dfeff60406a35e1f7739e8e3dcd2e53382dacf884df70fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80cb1543cd256747dfeff60406a35e1f7739e8e3dcd2e53382dacf884df70fb->enter($__internal_e80cb1543cd256747dfeff60406a35e1f7739e8e3dcd2e53382dacf884df70fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        $__internal_a67c5c7f182f8d1e0e7967b19df989a6d51a4030fa2b50452a945706077b520b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c5c7f182f8d1e0e7967b19df989a6d51a4030fa2b50452a945706077b520b->enter($__internal_a67c5c7f182f8d1e0e7967b19df989a6d51a4030fa2b50452a945706077b520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80cb1543cd256747dfeff60406a35e1f7739e8e3dcd2e53382dacf884df70fb->leave($__internal_e80cb1543cd256747dfeff60406a35e1f7739e8e3dcd2e53382dacf884df70fb_prof);

        
        $__internal_a67c5c7f182f8d1e0e7967b19df989a6d51a4030fa2b50452a945706077b520b->leave($__internal_a67c5c7f182f8d1e0e7967b19df989a6d51a4030fa2b50452a945706077b520b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6201f67fe879e26620f1536e8e22177a86e37aa7e468fbac8e6c97035648d809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6201f67fe879e26620f1536e8e22177a86e37aa7e468fbac8e6c97035648d809->enter($__internal_6201f67fe879e26620f1536e8e22177a86e37aa7e468fbac8e6c97035648d809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27f6e68be18da8ea56463475b1b5f6500eec84094271f9e7cf3fe192fa18ecf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f6e68be18da8ea56463475b1b5f6500eec84094271f9e7cf3fe192fa18ecf0->enter($__internal_27f6e68be18da8ea56463475b1b5f6500eec84094271f9e7cf3fe192fa18ecf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_27f6e68be18da8ea56463475b1b5f6500eec84094271f9e7cf3fe192fa18ecf0->leave($__internal_27f6e68be18da8ea56463475b1b5f6500eec84094271f9e7cf3fe192fa18ecf0_prof);

        
        $__internal_6201f67fe879e26620f1536e8e22177a86e37aa7e468fbac8e6c97035648d809->leave($__internal_6201f67fe879e26620f1536e8e22177a86e37aa7e468fbac8e6c97035648d809_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d970c8fa1bcca658b2c2ad6c39eabc1d505444abf859d4fbfab7a4d82ec2e7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d970c8fa1bcca658b2c2ad6c39eabc1d505444abf859d4fbfab7a4d82ec2e7db->enter($__internal_d970c8fa1bcca658b2c2ad6c39eabc1d505444abf859d4fbfab7a4d82ec2e7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6b768a2b6b9cb1975cb814bff2c032b8c73b776026161d759400377a7e366cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b768a2b6b9cb1975cb814bff2c032b8c73b776026161d759400377a7e366cc->enter($__internal_c6b768a2b6b9cb1975cb814bff2c032b8c73b776026161d759400377a7e366cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6b768a2b6b9cb1975cb814bff2c032b8c73b776026161d759400377a7e366cc->leave($__internal_c6b768a2b6b9cb1975cb814bff2c032b8c73b776026161d759400377a7e366cc_prof);

        
        $__internal_d970c8fa1bcca658b2c2ad6c39eabc1d505444abf859d4fbfab7a4d82ec2e7db->leave($__internal_d970c8fa1bcca658b2c2ad6c39eabc1d505444abf859d4fbfab7a4d82ec2e7db_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCentre/edit.html.twig";
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
{% endblock %}", "@Admin/CtCentre/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCentre\\edit.html.twig");
    }
}
